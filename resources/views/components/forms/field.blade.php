<div class="col" @if($field['type'] == 'hidden') style="display: none" @endif>
    @if($field['type'] == 'region-selector')
        <livewire:region-selector :region-id="$field['region_id']??null" :district-id="$field['district_id']??null"/>
    @elseif($field['type'] == 'select')
        <x-forms.select :type="$field['type']"
                        :name="$field['name']"
                        :label="$field['label']"
                        :value="old($field['name'],$field['value'] ?? '')"
                        :options="$field['options']"
                        :multiple="$field['multiple']??false"
                        :required="$field['required'] ?? false"
                        :disabled="$field['disabled'] ?? false"
                        :autofocus="$field['autofocus'] ?? false"/>
    @elseif($field['type'] == 'summernote')
        <x-forms.summernote
            :name="$field['name']"
            :label="$field['label']"
            :required="$field['required'] ?? false"
            :value="$field['value']??''"/>
    @else
        <x-forms.input
            type="{{$field['type']}}"
            name="{{$field['name']}}"
            label="{{$field['label']}}"
            value="{{old($field['name'],$field['value'] ?? '')}}"
            :required="$field['required'] ?? false"
            :disabled="$field['disabled'] ?? false"
            :autofocus="$field['autofocus'] ?? false"
            :placeholder="$field['placeholder'] ?? ''"/>
    @endif
</div>
