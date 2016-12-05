<template id="order-list">
    <div class="col-md-12" style="margin-top: 15px;">
        <div class="row">
            <div class="panel col-lg-12" id="orders-panel">
                <form method="POST" @submit.prevent="createOrder()">
                    <div class="form-group">
                        <label for="order_kind">Order:</label>
                        <select class="form-control" v-model="newOrder.kind" @change="changeOrderTypes()" name="order_kind">

                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="order_type">Select type: </label>
                        <select class="form-control" v-if="isSheet()" v-model="newOrder.type" name="order_type">

                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<orders-comp></orders-comp>