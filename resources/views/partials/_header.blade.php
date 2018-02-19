<div class="container">
    <div class="header">
        <div class="languages float-right">
            
            @if(Request::is("en-fta") or Request::is('en-about-us'))
                <a href="cn-fta"><img src="images/btn_chinese_off.jpg" alt="Chinese Page"  title="Chinese Page"/></a>
                <a href="/"><img src="images/en_btn_english_off.jpg" alt="Japanese Page" title="Japanese Page"></a>
            @elseif(Request::is("cn-fta") or Request::is('cn-about-us'))
                <a href="en-fta"><img src="images/btn_english_off.jpg" alt="English Page" title="English Page" /></a>
                <a href="/"><img src="images/en_btn_english_off.jpg" alt="Japanese Page" title="Japanese Page"></a>
            @else
                <a href="cn-fta"><img src="images/btn_chinese_off.jpg" alt="Chinese Page"  title="Chinese Page"/></a>
                <a href="en-fta"><img src="images/btn_english_off.jpg" alt="English Page" title="English Page" /></a>
            @endif
        </div>
    </div>
</div>