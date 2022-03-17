<div class="cookieBar" id="cookieBar">
    <div class="cookieBarInner">
        <p class="cookieBarText">Bu site, hizmetlerini sunmak ve trafiği analiz etmek için çerezlerden yararlanıyor.</p>
        <div class="cookieBarButtons">
            <a href="" class="cookieBarButton cookieBarMoreButton">Daha fazla bilgi edinin</a>
            <a href="javascript:void(0)" onclick="onCookie('cookieBar')" class="cookieBarButton cookieBarConsentButton">Anladım</a>
        </div>
    </div>
</div>

<script>
    function setCookie(name, value, days) {
        var date = new Date();
        date.setDate(date.getDate() + days);
        document.cookie = name + '=' + escape(value) + '; expires=' + date.toUTCString();
        console.log('cookie ' + name + ' created');
    }

    function getCookie(cookieName) {
        var pattern = cookieName + '=(?<value>[0-9a-zA-Z\s]+);?';
        var regex = new RegExp(pattern);
        var result = document.cookie.match(regex);
        if (result) {
            return result.groups.value;
        }
    }

    function showCookieBanner(id) {
        if (!getCookie(id)) {
            document.getElementById(id).classList.add('accept');
        }
    }

    function onCookie(id) {
        document.getElementById(id).classList.remove('accept');
        setCookie(id, true, 5);
    }

    showCookieBanner("cookieBar");
</script>