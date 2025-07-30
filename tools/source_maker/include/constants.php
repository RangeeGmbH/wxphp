<?php
/**
 * @author Mário Soares
 * @contributors Jefferson González
 *
 * @license
 * This file is part of wxPHP check the LICENSE file for information.
 *
 * @description
 * Some predefined constants to assit on the code generation.
 *
 * The purpose is to assist the code generator manually in case
 * the json_generator didn't return some required constants.
 *
*/

//wxSplitterWindow
$defConsts["wxSP_3D"] = true;
$defConsts["wxSP_3DSASH"] = true;
$defConsts["wxSP_3DBORDER"] = true;
$defConsts["wxSP_BORDER"] = true;
$defConsts["wxSP_NOBORDER"] = true;
$defConsts["wxSP_NO_XP_THEME"] = true;
$defConsts["wxSP_PERMIT_UNSPLIT"] = true;
$defConsts["wxSP_LIVE_UPDATE"] = true;

//wxSizer, wxStaticText, etc...
$defConsts["wxST_NO_AUTORESIZE"] = true;

//wxGauge
$defConsts["wxGA_HORIZONTAL"] = true;
$defConsts["wxGA_VERTICAL"] = true;
$defConsts["wxGA_SMOOTH"] = true;

//wxButton
$defConsts["wxBU_EXACTFIT"] = true;
$defConsts["wxNO_BORDER"] = true;

//Image types

//wxCalendarCtrl

//wxCheckBox
$defConsts["wxCHK_2STATE"] = true;
$defConsts["wxCHK_3STATE"] = true;
$defConsts["wxCHK_ALLOW_3RD_STATE_FOR_USER"] = true;

//wxToolBar

//wxListCtrl
$defConsts["wxLC_LIST"] = true;
$defConsts["wxLC_REPORT"] = true;
$defConsts["wxLC_VIRTUAL"] = true;
$defConsts["wxLC_ICON"] = true;
$defConsts["wxLC_SMALL_ICON"] = true;
$defConsts["wxLC_ALIGN_TOP"] = true;
$defConsts["wxLC_ALIGN_LEFT"] = true;
$defConsts["wxLC_AUTOARRANGE"] = true;
$defConsts["wxLC_EDIT_LABELS"] = true;
$defConsts["wxLC_NO_HEADER"] = true;
$defConsts["wxLC_SINGLE_SEL"] = true;
$defConsts["wxLC_SORT_ASCENDING"] = true;
$defConsts["wxLC_SORT_DESCENDING"] = true;
$defConsts["wxLC_HRULES"] = true;
$defConsts["wxLC_VRULES"] = true;

//wxNoteBook
$defConsts["wxNB_TOP"] = true;
$defConsts["wxNB_LEFT"] = true;
$defConsts["wxNB_RIGHT"] = true;
$defConsts["wxNB_BOTTOM"] = true;
$defConsts["wxNB_FIXEDWIDTH"] = true;
$defConsts["wxNB_MULTILINE"] = true;
$defConsts["wxNB_NOPAGETHEME"] = true;

//Id's

// Standard button IDs

// System menu IDs (used by "wxUniv)

// IDs used by generic file dialog (13 consecutive starting from this value)

//Keycodes

// These are by design not compatible with unicode characters.
// If you want to get a unicode character from a key event use
// "WXKeyEvent::GetUnicodeKey instead.

// the following key codes are only generated under Windows currently

// Hardware-specific buttons

//wxTextCtrl, wxRichTexCtrl, wxSearchCtrl etc...
$defConsts["wxTE_MULTILINE"] = true;
$defConsts["wxTE_PASSWORD"] = true;
$defConsts["wxTE_READONLY"] = true;
$defConsts["wxTE_PROCESS_ENTER"] = true;
$defConsts["wxTE_PROCESS_TAB"] = true;
$defConsts["wxTE_RICH"] = true;
$defConsts["wxTE_RICH2"] = true;
$defConsts["wxTE_AUTO_URL"] = true;
$defConsts["wxTE_NOHIDESEL"] = true;
$defConsts["wxTE_NO_VSCROLL"] = true;
$defConsts["wxTE_LEFT"] = true;
$defConsts["wxTE_CENTRE"] = true;
$defConsts["wxTE_RIGHT"] = true;
$defConsts["wxTE_DONTWRAP"] = true;
$defConsts["wxTE_CHARWRAP"] = true;
$defConsts["wxTE_WORDWRAP"] = true;
$defConsts["wxTE_BESTWRAP"] = true;

$defConsts["wxTRANSPARENT_WINDOW"] = true;
$defConsts["wxTAB_TRAVERSAL"] = true;
$defConsts["wxWANTS_CHARS"] = true;
$defConsts["wxNO_FULL_REPAINT_ON_RESIZE"] = true;
$defConsts["wxVSCROLL"] = true;
$defConsts["wxALWAYS_SHOW_SB"] = true;
$defConsts["wxCLIP_CHILDREN"] = true;
$defConsts["wxFULL_REPAINT_ON_RESIZE"] = true;

//wxListBox, wxCheckListBox, etc..
$defConsts["wxLB_SINGLE"] = true;
$defConsts["wxLB_MULTIPLE"] = true;
$defConsts["wxLB_EXTENDED"] = true;
$defConsts["wxLB_HSCROLL"] = true;
$defConsts["wxLB_ALWAYS_SB"] = true;
$defConsts["wxLB_NEEDED_SB"] = true;
$defConsts["wxLB_SORT"] = true;

//wxSocketBase

//wxFileDialog
$defConsts["wxFD_DEFAULT_STYLE"] = true;

//wxComboBox
$defConsts["wxCB_SIMPLE"] = true;
$defConsts["wxCB_DROPDOWN"] = true;
$defConsts["wxCB_READONLY"] = true;
$defConsts["wxCB_SORT"] = true;

//wxTreeCtrl
$defConsts["wxTR_DEFAULT_STYLE"] = true;
$defConsts["wxTR_EDIT_LABELS"] = true;
$defConsts["wxTR_FULL_ROW_HIGHLIGHT"] = true;
$defConsts["wxTR_HAS_BUTTONS"] = true;
$defConsts["wxTR_HAS_VARIABLE_ROW_HEIGHT"] = true;
$defConsts["wxTR_HIDE_ROOT"] = true;
$defConsts["wxTR_LINES_AT_ROOT"] = true;
$defConsts["wxTR_MULTIPLE"] = true;
$defConsts["wxTR_NO_BUTTONS"] = true;
$defConsts["wxTR_NO_LINES"] = true;
$defConsts["wxTR_ROW_LINES"] = true;
$defConsts["wxTR_SINGLE"] = true;
$defConsts["wxTR_TWIST_BUTTONS"] = true;

//wxHyperlinkCtrl
$defConsts["wxHL_CONTEXTMENU"] = true;
$defConsts["wxHL_ALIGN_LEFT"] = true;
$defConsts["wxHL_ALIGN_RIGHT"] = true;
$defConsts["wxHL_ALIGN_CENTRE"] = true;
$defConsts["wxHL_DEFAULT_STYLE"] = true;


$defConsts["wxDEFAULT_DIALOG_STYLE"] = true;
$defConsts["wxDEFAULT_FRAME_STYLE"] = true;

//wxFontPickerCtrl
$defConsts["wxFNTP_DEFAULT_STYLE"] = true;
$defConsts["wxFNTP_FONTDESC_AS_LABEL"] = true;
$defConsts["wxFNTP_USEFONT_FOR_LABEL"] = true;
$defConsts["wxFNTP_USE_TEXTCTRL"] = true;

//wxFilePickerCtrl
$defConsts["wxFLP_DEFAULT_STYLE"] = true;
$defConsts["wxFLP_CHANGE_DIR"] = true;
$defConsts["wxFLP_FILE_MUST_EXIST"] = true;
$defConsts["wxFLP_OPEN"] = true;
$defConsts["wxFLP_OVERWRITE_PROMPT"] = true;
$defConsts["wxFLP_SAVE"] = true;
$defConsts["wxFLP_USE_TEXTCTRL"] = true;

//wxDirPickerCtrl
$defConsts["wxDIRP_DEFAULT_STYLE"] = true;
$defConsts["wxDIRP_CHANGE_DIR"] = true;
$defConsts["wxDIRP_DIR_MUST_EXIST"] = true;
$defConsts["wxDIRP_USE_TEXTCTRL"] = true;

//wxDatepickerCtrl

//wxScrollBar
$defConsts["wxSB_HORIZONTAL"] = true;
$defConsts["wxSB_VERTICAL"] = true;

//wxSpinCtrl, wxSpinButton
$defConsts["wxSP_ARROW_KEYS"] = true;
$defConsts["wxSP_WRAP"] = true;
$defConsts["wxSP_VERTICAL"] = true;
$defConsts["wxSP_HORIZONTAL"] = true;

//wxGenericDirCtrl

$defConsts["wxSUNKEN_BORDER"] = true;

//wxHtmlWindow
$defConsts["wxHW_SCROLLBAR_AUTO"] = true;
$defConsts["wxHW_NO_SELECTION"] = true;
$defConsts["wxHW_SCROLLBAR_NEVER"] = true;
$defConsts["wxHW_DEFAULT_STYLE"] = true;

//wxBitmapButton
$defConsts["wxBU_AUTODRAW"] = true;

//wxSlider
$defConsts["wxSL_AUTOTICKS"] = true;
$defConsts["wxSL_BOTH"] = true;
$defConsts["wxSL_BOTTOM"] = true;
$defConsts["wxSL_HORIZONTAL"] = true;
$defConsts["wxSL_INVERSE"] = true;
$defConsts["wxSL_LABELS"] = true;
$defConsts["wxSL_LEFT"] = true;
$defConsts["wxSL_RIGHT"] = true;
$defConsts["wxSL_SELRANGE"] = true;
$defConsts["wxSL_TOP"] = true;
$defConsts["wxSL_VERTICAL"] = true;

//wxRadioButton
$defConsts["wxRB_GROUP"] = true;
$defConsts["wxRB_SINGLE"] = true;

//wxRadionBox
$defConsts["wxRA_SPECIFY_COLS"] = true;
$defConsts["wxRA_SPECIFY_ROWS"] = true;

//wxStaticLine
$defConsts["wxLI_HORIZONTAL"] = true;
$defConsts["wxLI_VERTICAL"] = true;

//wxChoicebook
$defConsts["wxCHB_BOTTOM"] = true;
$defConsts["wxCHB_DEFAULT"] = true;
$defConsts["wxCHB_LEFT"] = true;
$defConsts["wxCHB_RIGHT"] = true;
$defConsts["wxCHB_TOP"] = true;

//wxListbook
$defConsts["wxLB_BOTTOM"] = true;
$defConsts["wxLB_DEFAULT"] = true;
$defConsts["wxLB_LEFT"] = true;
$defConsts["wxLB_RIGHT"] = true;
$defConsts["wxLB_TOP"] = true;

//wxAuiNotebook

//wxMenuBar
$defConsts["wxMB_DOCKABLE"] = true;

//wxToolBar Item Kind

//Dialog buttons
$defConsts["wxYES_NO"] = true;
$defConsts["wxYES"] = true;
$defConsts["wxNO"] = true;

//Splash screen
$defConsts["wxSPLASH_CENTRE_ON_PARENT"] = true;
$defConsts["wxSPLASH_CENTRE_ON_SCREEN"] = true;
$defConsts["wxSPLASH_NO_CENTRE"] = true;
$defConsts["wxSPLASH_TIMEOUT"] = true;
$defConsts["wxSPLASH_NO_TIMEOUT"] = true;

/**
 * Another set of constants used by the event functions like connect
 * and disconnect
*/
$defConsts["wxEVT_COMMAND_BUTTON_CLICKED"] = true;
$defConsts["wxEVT_COMMAND_CHECKBOX_CLICKED"] = true;
$defConsts["wxEVT_COMMAND_CHECKLISTBOX_TOGGLED"] = true;
$defConsts["wxEVT_COMMAND_CHOICE_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_COMBOBOX_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_DIRPICKER_CHANGED"] = true;
$defConsts["wxEVT_COMMAND_FILEPICKER_CHANGED"] = true;
$defConsts["wxEVT_COMMAND_LISTBOX_DOUBLECLICKED"] = true;
$defConsts["wxEVT_COMMAND_LISTBOX_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_LIST_BEGIN_DRAG"] = true;
$defConsts["wxEVT_COMMAND_LIST_BEGIN_LABEL_EDIT"] = true;
$defConsts["wxEVT_COMMAND_LIST_BEGIN_RDRAG"] = true;
$defConsts["wxEVT_COMMAND_LIST_CACHE_HINT"] = true;
$defConsts["wxEVT_COMMAND_LIST_COL_BEGIN_DRAG"] = true;
$defConsts["wxEVT_COMMAND_LIST_COL_CLICK"] = true;
$defConsts["wxEVT_COMMAND_LIST_COL_DRAGGING"] = true;
$defConsts["wxEVT_COMMAND_LIST_COL_END_DRAG"] = true;
$defConsts["wxEVT_COMMAND_LIST_COL_RIGHT_CLICK"] = true;
$defConsts["wxEVT_COMMAND_LIST_DELETE_ALL_ITEMS"] = true;
$defConsts["wxEVT_COMMAND_LIST_DELETE_ITEM"] = true;
$defConsts["wxEVT_COMMAND_LIST_END_LABEL_EDIT"] = true;
$defConsts["wxEVT_COMMAND_LIST_INSERT_ITEM"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_ACTIVATED"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_DESELECTED"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_FOCUSED"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_MIDDLE_CLICK"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_RIGHT_CLICK"] = true;
$defConsts["wxEVT_COMMAND_LIST_ITEM_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_LIST_KEY_DOWN"] = true;
$defConsts["wxEVT_COMMAND_RADIOBOX_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_RADIOBUTTON_SELECTED"] = true;
$defConsts["wxEVT_COMMAND_SLIDER_UPDATED"] = true;
$defConsts["wxEVT_COMMAND_SPLITTER_DOUBLECLICKED"] = true;
$defConsts["wxEVT_COMMAND_SPLITTER_SASH_POS_CHANGED"] = true;
$defConsts["wxEVT_COMMAND_SPLITTER_SASH_POS_CHANGING"] = true;
$defConsts["wxEVT_COMMAND_SPLITTER_UNSPLIT"] = true;
$defConsts["wxEVT_COMMAND_TEXT_COPY"] = true;
$defConsts["wxEVT_COMMAND_TEXT_CUT"] = true;
$defConsts["wxEVT_COMMAND_TEXT_PASTE"] = true;
$defConsts["wxEVT_COMMAND_TEXT_UPDATED"] = true;
$defConsts["wxEVT_COMMAND_TOOL_ENTER"] = true;
$defConsts["wxEVT_COMMAND_VLBOX_SELECTED"] = true;

?>
