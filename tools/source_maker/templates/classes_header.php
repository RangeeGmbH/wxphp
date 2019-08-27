extern zend_class_entry* php_<?=$class_name?>_entry;
void php_<?=$class_name?>_destruction_handler(zend_resource * TSRMLS_DC);

class <?=$class_name?>_php<?if($class_name == "wxScrolled"){?>: public <?=$class_name?><wxPanel><?} elseif(!$class_methods["_forward_declaration"]){?>: public <?=$class_name?><?}?>
{
	public:
	
	<?=class_constructors_declaration($class_name, $class_methods)?>
	
	<?=class_virtual_declarations($class_name, $class_methods)?>

<?if(class_has_properties($class_name)){?>
    <?=class_init_properties_code($class_name)?>

    <?=class_uninit_properties_code($class_name)?>

    void** properties;
<?}?>
	
<?if($class_name == "wxEvtHandler"){?>
	void onEvent(wxEvent& evnt);
<? } ?>
	void ***tsrm_ls;
	zval* phpObj;
	wxPHPObjectReferences references;
};

BEGIN_EXTERN_C()
struct zo_<?=$class_name?> 
{
    zend_object zo;
    <?=$class_name?>_php* native_object;
    wxphp_object_type object_type;
    int is_user_initialized;
};

void php_<?=$class_name?>_free(void *object TSRMLS_DC);
zend_object* php_<?=$class_name?>_new(zend_class_entry *class_type TSRMLS_DC);
END_EXTERN_C()

#ifdef WXPHP_INCLUDE_METHOD_TABLES
static zend_function_entry php_<?=$class_name?>_functions[] = {
<?php
	$methods_entry = "";
	funcsOfClass($class_name, 1, $methods_entry);
	print $methods_entry;
?>
<?if(isset($defClassProperties[$class_name]) && isset($defIni[$class_name][$class_name])){?>
	PHP_ME(php_<?=$class_name?>, __get, wxphp_<?=$file_name?>_get_args, ZEND_ACC_PUBLIC)
<?}?>
	PHP_FE_END
};
#endif


static inline struct zo_<?=$class_name?> * php_<?=$class_name?>_fetch_object(zend_object *obj) {
      return (struct zo_<?=$class_name?> *)((char *)obj - XtOffsetOf(struct zo_<?=$class_name?>, zo));
}

#define Z_<?=$class_name?>_P(zv) php_<?=$class_name?>_fetch_object(Z_OBJ_P(zv))
