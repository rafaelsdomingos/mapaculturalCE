<?php use MapasCulturais\i; ?>
<div ng-class="field.error ? 'invalidField': '' " ng-if="::field.fieldType == 'links'" id="field_{{::field.id}}" >
    <div class="label icon"> 
        {{::field.title}} 
        <span ng-if="::field.required ">obrigatório</span>       

    </div>
    
    <div ng-if="::field.description" class="attachment-description">{{::field.description}}</div>

    <div><?php $this->part('registration-field-types/fields/links') ?></div>
</div>