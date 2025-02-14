<div>
    <x-form.layout>
        <x-breadcrumb.nav>
            <x-breadcrumb.list list="Dashboard" route="dashboard" />
            <x-breadcrumb.list list="Website" route="web-website" />
        </x-breadcrumb.nav>

        <x-tabs.url-tab>
            <x-tabs.url-content label="Website" url="/web-website" />
            <x-tabs.url-content label="App" url="/web-app" rounded="rounded-r-sm"/>
        </x-tabs.url-tab>



    </x-form.layout>
</div>
