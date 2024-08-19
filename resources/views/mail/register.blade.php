<x-mail::message>
    {!!
        __('mails.content.register', [
            'code' => $code,
            'timeout' => config('auth.verification_code_ttl'),
        ]) . __('mails.footer', ['name' => config('app.name'), 'uri' => config('app.url')])
    !!}
</x-mail::message>
