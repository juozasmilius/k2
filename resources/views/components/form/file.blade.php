<div class="custom-file">
        {{ Form::label($name, null, ['class' => 'custom-file-label']) }}
        {{ Form::file($name, $value, array_merge(['class' => 'custom-file-input'], $attributes)) }}
</div>