
<script>
    function parseCookie(cookie) {
        return Object.fromEntries(cookie.split('; ').map(c => {
            const [key, ...v] = c.split('=');
            return [key, v.join('=')];
        }));
    }

    function setCookie(name, value, lifetime, path = '/') {
        const offset = -60 * (new Date()).getTimezoneOffset();
        document.cookie = `${name}=${value}; path=${path}; expires=${(new Date(Date.now() + lifetime + offset)).toUTCString()}`
    }

    let parsedCookie = parseCookie(document.cookie);

    if (parsedCookie.client) {
        setCookie('client', parsedCookie.client, 3 * 60 * 120*1000);
    }
</script>
