<template>
    <div>
        <div v-for="row in rows" :key="row.id">
            <div class="form-group row">
                <div class="col-6">
                    <input
                        name="keys[]"
                        type="text"
                        class="form-control"
                        placeholder="Enter attribute"
                    >
                </div>
                <div class="col-6 d-flex align-items-center">
                    <input
                        v-model="row.value"
                        name="values[]"
                        type="text"
                        class="form-control"
                        placeholder="Enter values"
                    >
                    <div class="pl-2">
                        <a href="#" @click.prevent="removeItem(row.id)">*</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a @click.prevent="addForm" class="badge badge-secondary text-white">Add More</a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            id: 0,
            rows: [{ id: 0, value: "" }]
        };
    },
    methods: {
        addForm: function() {
            this.id = this.id + 1;
            this.rows.push({ id: this.id, value: "" });
        },
        removeItem: function(key) {
            this.rows = this.rows.filter(e => e.id !== key);
        }
    }
};
</script>
