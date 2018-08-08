<template>
    <div>
        <div class="container tambah-style"  style="max-width: 900px;">
            <div>
                <button type="button" class="btn btn-warning" data-dismiss="modal" @click="$router.push('/')">Kembali</button>
            </div>
            <form @submit.prevent="saveForm()" id="form-tambahpromotor" class="form-horizontal" method="POST" style="margin-top: 20px;">
                <div class="form-group underline-wrapper">
                    <label id="nm_siswa" for="nama_siswa" class="col-md-12 control-label">Nama Siswa</label>
                    <input type="text" v-model="student.nama_siswa" id="nama_siswa" name="nama_siswa" class="form-control borb-1" autocomplete="off" required>
                    <span class="input-underline"></span>
                    <span id="errorsangkatpromotor" class="" style="color: red; display: block;"></span>
                </div>

                <button type="submit" class="btn btn-primary btn-save" id="btnsubmit">Update</button>
                <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {

        name: 'EditComponent',

        data () {
            return {
            	studentId: null,
                student: {
                    nama_siswa: ''
                }
            }
        },
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.studentId = id;
            axios.get('student/' + id)
                .then(function (resp) {
                    app.student = resp.data;
                })
                .catch(function () {
                    swal({
						title: 'Oops...',
	                    text: 'Terjadi Error',
	                    type: 'error',
	                    animation: false,
	                    customClass: 'animated tada'
					})
                });
        },
        methods: {
            saveForm() {
                var app = this;
                var newStudent = app.student;
                axios.patch('student/' + app.studentId, newStudent)
                .then(function (resp) {
                    app.$router.replace('/');
                })
                .catch(function (resp) {
                    console.log(resp);
                    swal({
                        title: 'Oops...',
                        text: 'Terjadi Error',
                        type: 'error',
                        animation: false,
                        customClass: 'animated tada'
                    })
                });
            }
        }
    }
</script>

<style lang="css" scoped>
</style>