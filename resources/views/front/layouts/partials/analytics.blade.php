@if(app()->environment('production'))

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script nonce="{{ cspNonce() }}" async src="https://www.googletagmanager.com/gtag/js?id=UA-57290920-1"></script>
    <script nonce="{{ cspNonce() }}" >
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-57290920-1');
    </script>

@endif