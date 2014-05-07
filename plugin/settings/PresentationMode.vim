" toggle between working mode and presentation mode
" borrowed from skalnik(https://github.com/skalnik)
"
" font size change only work for GUI-version Vim

function! PresentationModeOn()
    colorscheme github              " 配色方案
    set guifont=Menlo:h20           " 设置认字体为Menlo h10
endfunction

function! PresentationModeOff()
    colorscheme molokai             " 配色方案
    set guifont=Menlo:h11           " 设置认字体为Menlo h11
endfunction

function! TogglePresentationMode()
  if !exists('w:present')
    let w:present=0
  endif

  if w:present==0
    call PresentationModeOn()
    let w:present=1
  else
    call PresentationModeOff()
    let w:present=0
  endif
endfunction

map <leader>z :call TogglePresentationMode()<CR>
