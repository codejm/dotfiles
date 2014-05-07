let NERDTreeIgnore=['\.pyc', '\.gif', '\.png', '\.jpg', '\.jpge', '\.svn', '\.swp', '\.psd']
let NERDTreeBookmarksFile='/home/codejm/.vim/cache/NERDBookmarks.txt'
let NERDTreeShowBookmarks=1
let NERDTreeChDirMode=2
let NERDTreeMouseMode=2
let g:nerdtree_tabs_focus_on_files=1
let g:nerdtree_tabs_open_on_gui_startup=0
let NERDTreeMinimalUI=1
let NERDTreeDirArrows=1
let g:NERDTreeWinSize=25
nmap <C-d>             : NERDTreeToggle<cr>
nmap <C-d><C-d>        : NERDTreeMirror<cr>
nmap <C-e>             : BufExplorer<cr>

"map <leader>d :NERDTreeMirrorToggle<CR>
map <leader>r :NERDTreeFind<cr>
