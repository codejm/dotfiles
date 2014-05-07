" split window resize
if bufwinnr(1)
  map <C-W>. :vertical resize +30<CR>
  map <C-W>, :vertical resize -30<CR>
endif

" make the current window bigger
set winheight=5
set winminheight=5
"set winheight=999
