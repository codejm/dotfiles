map <F8> :TlistToggle<cr>
nmap <C-c><C-t> : !ctags -R --fields=+lS<cr>
nmap <C-c><C-m> : tselect<cr>

set tags+=./tags;/
set tags+=gems.tags
let Tlist_Auto_Update                = 1
let Tlist_Close_On_Select            = 0
let Tlist_Compact_Format             = 0
let Tlist_Display_Prototype          = 0
let Tlist_Display_Tag_Scope          = 1
let Tlist_Enable_Fold_Column         = 0
let Tlist_Exit_OnlyWindow            = 0
let Tlist_File_Fold_Auto_Close       = 0
let Tlist_GainFocus_On_ToggleOpen    = 1
let Tlist_Hightlight_Tag_On_BufEnter = 1
let Tlist_Inc_Winwidth               = 0
let Tlist_Max_Submenu_Items          = 1
let Tlist_Max_Tag_Length             = 30
let Tlist_Process_File_Always        = 0
let Tlist_Show_Menu                  = 0
let Tlist_Show_One_File              = 0
let Tlist_Sort_Type                  = "order"
let Tlist_Use_Horiz_Window           = 0
let Tlist_Use_Right_Window           = 1
let Tlist_WinWidth                   = 25
let Tlist_php_settings               = 'php;c:class;i:interfaces;d:constant;f:function;txt'
