<p class="">
    <a class="link-underline link-blue" href="https://laravelpackage.training">
        Buy the entire course at <strong>laravelpackage.training</strong>
    </a>
</p>

@if (sponsorIsViewingPage())
    <p class="mt-2 text-xs text-gray">
        As a sponsor, you can get 15$ off with following coupon:
        <span class="mt-2 font-mono opacity-75">{{ config('services.promo_codes.package_training') }}</span>
    </p>
@endif
