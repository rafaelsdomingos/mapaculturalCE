<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-notification
    opportunity-phase-publish-config-registration
    mc-alert
');
?>
<mc-card>
    <div class="grid-12 opportunity-phase-list-evaluation">
        <mc-alert v-if="!entity.opportunity.publishedRegistrations" class="col-12" type="helper">
            <?= i::__('Após a finalização das avaliações, você precisa acessar a <strong>lista de inscrições para aplicar os resultados dessas avaliações</strong>.') ?>
        </mc-alert>
        
        <div class="col-6 opportunity-phase-list-evaluation_action--center">
           <div class="col-6 opportunity-phase-list-evaluation_action__box">
                <div class="opportunity-phase-list-evaluation__status col-6">
                    <h4 class="bold"><?php i::_e("Status das inscrições") ?></h4>
                    <!-- <p><?= i::__("Status da avaliação:") ?> <strong>Em andamento</strong></p> -->
                    <p v-if="entity.summary.registrations"><?= i::__("Quantidade inscrições:") ?> <strong>{{entity.summary.registrations}}</strong> <?php i::_e('inscrições') ?></p>
                    <p v-if="entity.summary.evaluated"><?= i::__("Quantidade de inscrições <strong>avaliadas</strong>:") ?> <strong>{{entity.summary.evaluated}}</strong> <?php i::_e('inscrições') ?></p>
                    <p v-if="entity.summary.Approved"><?= i::__("Quantidade de inscrições <strong>selecionadas</strong>:") ?> <strong>{{entity.summary.Approved}}</strong> <?php i::_e('inscrições') ?></p>
                    <p v-if="entity.summary.Waitlist"><?= i::__("Quantidade de inscrições <strong>suplentes</strong>:") ?> <strong>{{entity.summary.Waitlist}}</strong> <?php i::_e('inscrições') ?></p>
                    <p v-if="entity.summary.Invalid"><?= i::__("Quantidade de inscrições <strong>inválidas</strong>:") ?> <strong>{{entity.summary.Invalid}}</strong> <?php i::_e('inscrições') ?></p>
                    <p v-if="entity.summary.Pending"><?= i::__("Quantidade de inscrições <strong>pendentes</strong>:") ?> <strong>{{entity.summary.Pending}}</strong> <?php i::_e('inscrições') ?></p>
                            
                </div>   
                <div class="col-6 opportunity-phase-list-evaluation__cardfooter">
                    <h5 class="bold"><?= i::__("A lista de inscrições pode ser acessada utilizando o botão abaixo")?></h5>
                    <mc-link :entity="entity.opportunity" class="opportunity-phase-list-evaluation_buttonbox button button--primary button--icon " icon="external" route="registrations" right-icon>
                       <h4 class="semibold"><?= i::__("Conferir lista de inscrições") ?></h4>
                    </mc-link>

                </div>
            </div>
        </div>
        <div class="col-6 opportunity-phase-list-evaluation_action--center">
           <div class="col-6 opportunity-phase-list-evaluation_action__box">
                <div class="opportunity-phase-list-evaluation__status col-6">
                        <h4 class="bold"><?php i::_e("Status das avaliações") ?></h4>
                        <p v-for="(value, label) in entity.summary.evaluations"><?= i::__("Quantidade de inscrições") ?> <strong>{{label.toLowerCase()}}</strong>: <strong>{{value}}</strong> <?php i::_e('inscrições') ?></p>
                </div>
                <div class="col-6 opportunity-phase-list-evaluation__cardfooter">
                    <h5 class="bold"><?= i::__("Confira a lista de avaliações e acesse-as individualmente")?></h5>
                    <mc-link route="opportunity/allEvaluations" :params="[entity.opportunity.id, 'all']" class="opportunity-phase-list-evaluation_buttonbox button button--primary button--icon " icon="external" right-icon>
                    <h4 class="semibold"><?= i::__("Lista de avaliações") ?></h4>
                    </mc-link>
                </div>    
            </div>
        </div>
        <div class="opportunity-phase-list-evaluation__line col-12"></div>
        <opportunity-phase-publish-config-registration :phase="entity.opportunity" :phases="phases" hide-datepicker></opportunity-phase-publish-config-registration>
    </div>
</mc-card>