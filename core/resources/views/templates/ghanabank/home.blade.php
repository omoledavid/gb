@extends($activeTemplate.'layouts.frontend')

@section('content')

    @include($activeTemplate.'sections.slider')

    <div class="content" id="">
        @include($activeTemplate.'sections.news_tab')
        @include($activeTemplate.'sections.easy_banking')
        @include($activeTemplate.'sections.services')
        @include($activeTemplate.'sections.find_branch')
        @include($activeTemplate.'sections.rates')
    </div>

@endsection
