<p>
    {!! $template !!}
</p>
@if (!$unsubscribe_link)
    {{ link_to_route('subscriber.unsubscribe', 'Unsubscribe', $subscriber) }}
@endif
<p style="text-align: center">
    Copyright (c) 2017
</p>