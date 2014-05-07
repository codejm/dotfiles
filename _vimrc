set nocompatible
source $VIMRUNTIME/vimrc_example.vim
"source $VIMRUNTIME/mswin.vim
"behave mswin

"set diffexpr=MyDiff()
"function MyDiff()
  "let opt = '-a --binary '
  "if &diffopt =~ 'icase' | let opt = opt . '-i ' | endif
  "if &diffopt =~ 'iwhite' | let opt = opt . '-b ' | endif
  "let arg1 = v:fname_in
  "if arg1 =~ ' ' | let arg1 = '"' . arg1 . '"' | endif
  "let arg2 = v:fname_new
  "if arg2 =~ ' ' | let arg2 = '"' . arg2 . '"' | endif
  "let arg3 = v:fname_out
  "if arg3 =~ ' ' | let arg3 = '"' . arg3 . '"' | endif
  "let eq = ''
  "if $VIMRUNTIME =~ ' '
    "if &sh =~ '\<cmd'
      "let cmd = '"' . $VIMRUNTIME . '\diff"'
      "let eq = '"'
    "else
      "let cmd = substitute($VIMRUNTIME, ' ', '" ', '') . '\diff"'
    "endif
  "else
    "let cmd = $VIMRUNTIME . '\diff'
  "endif
  "silent execute '!' . cmd . ' ' . opt . arg1 . ' ' . arg2 . ' > ' . arg3 . eq
"endfunction

let mapleader = ','
let g:mapleader = ','

" pathogen
call pathogen#infect()
syntax on
filetype plugin indent on

" encoding
set encoding=utf-8
set fileencodings=ucs-bom,utf-8,gbk,gb2312,big5,euc-jp,gbk,euc-kr,utf-bom,iso8859-1,euc-jp,utf-16le,latin1
set fenc=utf-8 enc=utf-8 tenc=utf-8
scriptencoding utf-8
let &termencoding = &encoding
language messages zh_CN.utf-8
" 解决菜单乱码
source $VIMRUNTIME/delmenu.vim
source $VIMRUNTIME/menu.vim

set nocompatible                " 不兼容vi模式
set backspace=2                 " 设置删除键可用
set history=1000                " 历史记录数
set ruler                       " 永久显示光标位置
set wrap                        " 自动换行
set linebreak                   " 换行符 temp
set hidden                      " 允许在有未保存的修改时切换缓冲区，此时的修改由 vim 负责保存
set cursorline                  " 突出显示当前行
set nofoldenable                " 取消自动折叠
set number
set relativenumber                      " 显示行号
set numberwidth=4               " 行号宽度
set title
set showmode
set nobomb                      " 不自动设置字节序标记
"set clipboard+=unnamed          " 系统剪贴板
set clipboard=unnamedplus
set splitright                  " 垂直分割窗口在右侧
set scrolloff=5                 " 滚动条上下距离5行
set switchbuf=useopen           " 窗口/缓冲区在已有的分割窗口打开
set showtabline=2               " 开启自带的tab栏
set laststatus=2                " 总是显示状态栏
" 状态行显示的内容 [包括系统平台、文件类型、坐标、所占比例、时间等]
""set statusline=%F%m%r%h%w\ [FORMAT=%{&ff}]\ [TYPE=%Y]\ [POS=%l,%v][%p%%]\ %y%r%m%*%=\ %{strftime(\"%d/%m/%y\ -\ %H:%M\")}
set wildmode=longest,list       " 补全模式 用最长的子串补全，然后是每个完整的匹配
set wildmenu                    " 补全模式
set synmaxcol=1024              " 行语法高亮限制
"set viminfo=


filetype on                     " 启动文件检测
filetype indent on              " 根据文件类型缩进
filetype plugin on              " 根据文件类型插件

syntax enable                   " 语法高亮
set hlsearch                    " 高亮度搜寻
set ignorecase                  " 搜索忽略大小写
set incsearch                   " 跟随搜索
syntax on                       " 高亮
set t_Co=256
set nobackup                    " 关闭备份
set noswapfile                  " 没有交换文件
set nowritebackup               " 没有写备份
set copyindent                  " 复制自动缩进
set smartcase                   " 智能大小写
set smarttab                    " 智能tab
set expandtab                   " 空格代替tab
set softtabstop=4               " 智能tab tab和空格混合
set shiftwidth=4                " 自动缩进空白长度
set tabstop=4                   " tab => 空格
set shortmess=Ia                " 启动的时候不显示那个援助乌干达儿童的提示
set visualbell                  " 错误闪屏
set noerrorbells                " 错误不发出蹬蹬声
set t_vb=                       " 分割窗口显示白色分割线
set tm=500                      " temp

set go=                         " 去掉难看的工具栏和滑动条
set guifont=Menlo\ 11           ",Consolas\ for\ Powerline\ FixedD:h11           " 设置认字体为Menlo
colorscheme molokai             " 配色方案
set ambiwidth=double            " 特殊字符集
set autoindent                  " 自动缩进
set autochdir                   " 设置工作目录为当前编辑文件的目录
set bsdir=buffer                " 设置工作目录为当前编辑文件的目录
set linespace=5                 " 行距
set showmatch                   " 高亮显示匹配的括号
set showcmd                     " 显示命令
set cmdheight=2                 " 命令行的高度，默认为1，这里设为2
set iskeyword=@,48-57,_,-,182-255 " 带有如下符号的单词不要被换行分割



" ===========================================================================
" Key Shortcut
" ===========================================================================
" 新tab
nmap <C-c>   :tabnew<CR><ESC>
" 上一个tab
nmap <C-o>   :tabprevious<CR><ESC>
" 下一个tab
nmap <C-n>   :tabnext<CR><ESC>
" Q退出
nmap Q       :x<CR><ESC>
" 强制保存
nmap <leader>w! :w !sudo tee %<CR>
" 替换
nmap <S-m>   :%s///g<CR>

" remap VIM 0
map 0 ^

" identation
vmap <TAB> >gv
vmap <S-TAB> <gv

" 禁用上下左右
map <Left> <Nop>
map <Right> <Nop>
map <Up> <Nop>
map <Down> <Nop>

" Auto
im  ;; <ESC>

" language
" ================php========================
au FileType php call AddPHPFuncList()
function AddPHPFuncList()
set dictionary-=$HOME/.vim/dict/php_funclist.txt dictionary+=$HOME/.vim/dict/php_funclist.txt
set complete-=k complete+=k
endfunction

" ================css/html===================
au FileType css,html call AddCssList()
function AddCssList()
set dictionary-=$HOME/.vim/dict/css_list.txt dictionary+=$HOME/.vim/dict/css_list.txt
set complete-=k complete+=k
endfunction

" ================js/html====================
au FileType js,html call AddJsList()
function AddJsList()
set dictionary-=$HOME/.vim/dict/javascript.txt dictionary+=$HOME/.vim/dict/javascript.txt
set complete-=k complete+=k
endfunction

"定义快速编辑_vimrc文件的快捷键为,ee
nmap <leader>ee :tabe $HOME/.vimrc<cr>
nmap <F2> :sh<cr>

" 永久撤销，Vim7.3 新特性
if has('persistent_undo')
    set undofile
    " 设置撤销文件的存放的目录
    if has("unix")
        set undodir=~/.vim/cache/undo
    else
        set undodir=D:\Temp
    endif
    set undolevels=1000
    set undoreload=1000000
endif

" 上一次编辑的位置
au BufReadPost * if line("'\"") > 0|if line("'\"") <= line("$")|exe("norm '\"")|else|exe "norm $"|endif|endif
" 清除搜索
noremap <C-h> :nohlsearch<CR>

au FileType c,cc,js,h,html,python,php,perl :call Cp()
fu Cp()
  ino , ,<SPACE>
  ino ; ;<SPACE>
	ino <= <SPACE><=<SPACE>
	ino *= <SPACE>*=<SPACE>
	ino /= <SPACE>/=<SPACE>
	ino >> <SPACE>>><SPACE>
	ino << <SPACE><<<SPACE>
	ino >= <SPACE>>=<SPACE>
	ino == <SPACE>==<SPACE>
	ino += <SPACE>+=<SPACE>
	ino && <SPACE>&&<SPACE>
endf

" ######### 括号、引号、中括号等自动匹配 ######### "
:inoremap ( ()<ESC>i
:inoremap { {}<ESC>i
:inoremap [ []<ESC>i
:inoremap " ""<ESC>i
:inoremap ' ''<ESC>i
:inoremap ` ``<ESC>i

" cursorline switched while focus is switched to another split window
autocmd WinEnter * setlocal cursorline
autocmd WinLeave * setlocal nocursorline

" ======================================
"  custom key and plugin configurations
" ======================================
" remove tailing whitespace
autocmd BufWritePre * :%s/\s\+$//e

" return current opened file's dirctory
cnoremap %% <C-R>=expand('%:h').'/'<CR>

" php help
autocmd BufNewFile,Bufread *.ros,*.inc,*.php set keywordprg="help"
set runtimepath+=$HOME/.vim/doc
