<?php
    use MapasCulturais\i;
    $this->import('
    mc-link
    modal 
    notification-list
');
?>


<modal :title="modalTitle" classes="create-modal" button-label="Notificações" @open="" @close="">
    <template #default>
        <div class="grid-12">
            <div class="col-12">
                <h1>Notificações</h1>
            </div>
            <div class="col-6">
                Você tem <span class="notification--badge">{{ totalNotification }}</span> notificação
            </div>
            <div class="col-6" style="text-align: right">
                Marcar todas como lidas
            </div>
        </div>
        <div class="grid-12">
            <div class="col-12">
                <notification-list></notification-list>
            </div>
            <div class="col-12">
                <p style="text-align: center">Ver todas as notificações</p>
            </div>
        </div>
    </template>
    <template #button="modal">
        <div class="grid-2">
            <div class="col-6">
                <a class="notification_header--link" @click="modal.open">Notificações</a>
            </div>
            <div class="col-6 notification_header--container">
                <a @click="modal.open">
                    <div>
                        <mc-icon width="18" name='notification'></mc-icon>
                    </div>
                    <div class="notification_header--badge">
                        <span>{{ totalNotification }}</span>
                    </div>
                </a>
            </div>
        </div>
    </template>
</modal>