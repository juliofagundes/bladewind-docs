@props([
    'image' => asset('bladewind/images/empty-state.svg'), 
    'show_image' => 'true',
    'button_label' => '', // button will not be displayed if no text is passed
    'onclick' => '',
    'css' => '',
    'message' => '',   // message to display
])

<div class="text-center px-4 pb-10 {{$css}}">
    @if($show_image == 'true')<img src="{{ $image }}" class="h-52 mx-auto" />@endif
    @if($message != '')<div class="text-gray-500/80 text-sm pt-6 px-4">{!!$message!!}</div>@endif
    <div class="pt-2">{!! $slot !!}</div>
    @if($button_label != '')
        <x-bladewind::button 
            onclick="{!!$onclick!!}" css="block mx-auto my-4"
            size="small">{{$button_label}}</x-bladewind::button>
    @endif
</div>