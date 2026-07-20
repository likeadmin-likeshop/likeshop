<template>
    <div class="user-wallet-table">
        <el-table :data="list" style="width: 100%">
            <el-table-column
                prop="source_type"
                label="类型"
            />
            <el-table-column
                
                prop="change_amount"
                label="金额"
            >
                <div slot-scope="scope" :class="{'primary': scope.row.change_type == 1}">
                    {{scope.row.change_amount}}
                </div>
            </el-table-column>
            <el-table-column
                prop="create_time"
                label="时间"
            />
        </el-table>
    </div>
</template>

<script>
export default {
    props: {
        list: {
            type: Array,
            default: () => []
        },
        type: {
            type: String,
            default: 'all'
        }
    },
    methods: {

    },
}
</script>

<style lang="scss">
.user-wallet-table {
    .el-table {
        color: #222;
    }
    .el-table .el-button--text {
        color: #222;
        font-weight: 400;
    }
    .el-table th {
        background-color: #F2F2F2;
    }
    .el-table thead {
        color: #555555;
        font-weight: 400;
    }
}
</style>