/*
 * @author Jefferson González
 * @contributors René Vögeli / Rangee GmbH
 *
 * @license
 * This file is part of wxPHP check the LICENSE file for information.
 *
*/

#include "references.h"

wxPHPObjectReferences::wxPHPObjectReferences()
{
    m_userInitialized = 0x000000;
}
wxPHPObjectReferences::wxPHPObjectReferences(std::string className) : className(className)
{
    m_userInitialized = 0x000000;
}


wxPHPObjectReferences::~wxPHPObjectReferences()
{
    RemoveReferences();
}

void wxPHPObjectReferences::Initialize()
{
    m_userInitialized = 0xAAEECC;
}

void wxPHPObjectReferences::UnInitialize()
{
    m_userInitialized = 0;
}

bool wxPHPObjectReferences::IsUserInitialized()
{
    return (m_userInitialized == 0xAAEECC);
}

void wxPHPObjectReferences::AddReference(zval* var, std::string class_and_method)
{
    #ifdef USE_WXPHP_REFERENCES_MANAGEMENT
    if(IsUserInitialized())
    {
        #ifdef USE_WXPHP_DEBUG
        php_printf("Adding Reference CLOSE BEFORE DISASTER?\n");
        php_printf("Adding Reference ??? on %s\n", class_and_method.c_str());
        #endif

        Z_TRY_ADDREF_P(var);

        m_references.emplace_back(var, "none");
    }
    #endif
}

void wxPHPObjectReferences::AddReference(zval* var, std::string class_and_method, std::string methodName)
{
#ifdef USE_WXPHP_REFERENCES_MANAGEMENT
    if(IsUserInitialized())
    {
#ifdef USE_WXPHP_DEBUG
        php_printf("Adding Reference CLOSE BEFORE DISASTER?\n");
        php_printf("Adding Reference %s on %s\n", class_and_method.c_str(), methodName.c_str());
#endif

        Z_TRY_ADDREF_P(var);

        m_references.emplace_back(var, methodName);
    }
#endif
}


void wxPHPObjectReferences::RemoveReferences()
{
    #ifdef USE_WXPHP_REFERENCES_MANAGEMENT
    if(IsUserInitialized())
    {
        #ifdef USE_WXPHP_DEBUG
        php_printf("Removing References\n");
        #endif

        for(unsigned int i=0; i<m_references.size(); i++)
        {
            php_printf("reference_name: %s from %i\n", m_references[i].methodName.c_str(), i);
            if (Z_REFCOUNTED_P((m_references[i].zvalue)) && Z_TYPE_P(m_references[i].zvalue) > IS_UNDEF && Z_TYPE_P(m_references[i].zvalue) <= _IS_ERROR && m_references[i].zvalue->value.counted->gc.refcount > 0) {
                #ifdef USE_WXPHP_DEBUG
                php_printf("Removing reference: %i %s\n", i, m_references[i].methodName.c_str());
                #endif
                Z_TRY_DELREF_P(m_references[i].zvalue);
            }
        }

        #ifdef USE_WXPHP_DEBUG
        php_printf("Finished Removing References\n");
        #endif

    }
    #endif
}
