	<template>
		<div>
			<div class="container container-style">
				<div class="datadata" id="datadata">
					<a href="javascript:void(0)" class="btn btn-info" id="tambah"  data-toggle="modal" data-target="#tambahModal" @click="$router.push('/create')"><i class="fas fa-pencil-alt mr-2"></i>Tambah</a>
				</div>

				<hr>

				<div class="table-responsive-sm" style="padding-top: 40px;">
					<table id="minda-table" class="table">
						<thead class="thead-light">
							<tr>
								<th>NIM Siswa</th>
								<th>Nama Siswa</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="(student, index) in students">
								<td> {{student.nim_siswa}} </td>
								<td> {{student.nama_siswa}} </td>
								<td>
									<router-link :to="{name: 'editStudent', params: {id: student.id}}" class="btn btn-info"><i class="fas fa-edit mr-2"></i></i>Update</router-link>

									<a href="#" class="btn btn-danger"
									@click="deleteIndex(student.id, index)">
										<i class="fas fa-times mr-2"></i>
									Hapus</a>
												
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</template>

	<script>
		import axios from 'axios'
		import swal from 'sweetalert2'
		import 'sweetalert2/src/sweetalert2.scss'

		export default {

			name: 'HomeComponent',

			data () {
				return {
					students: [],
				}
			},
			mounted() {
            	this.loadData()
        	},
        	methods: {
        		loadData() {
        			var app = this;        			
            		axios.get('student')
	                .then(function (resp) {
	                	app.students = resp.data;
	                })
	                .catch(function (resp) {
	                    swal({
							title: 'Oops...',
		                    text: 'Terjadi Error',
		                    type: 'error',
		                    animation: false,
		                    customClass: 'animated tada'
						})
	                });	
        		},
        		deleteIndex(id, index) {
        			var app = this;
        			swal({				
						title: 'Ingin menghapus data?',
						type: 'warning',
						showCancelButton: true,
						cancelButtonColor: '#ddd',
						confirmButtonColor: '#3085d6',
						confirmButtonText: 'Hapus',
						showLoaderOnConfirm: true,
						preConfirm: function() {
	                    	return axios.delete('student/' + id)
	                        .then(function (resp) {
	                            app.students.splice(index, 1);
	                            app.loadData()
	                            setTimeout(function() {
									swal({
										title: 'Success!',
					                    text: 'Berhasil',
					                    type: 'success',
					                    timer: '2000',
					                    animation: false,
					                    customClass: 'animated fadeIn'
									})
								}, 150);
	                        })
	                        .catch(function (resp) {
	                            swal({
									title: 'Oops...',
				                    text: 'Terjadi Error',
				                    type: 'error',
				                    animation: false,
				                    customClass: 'animated tada'
								})
	                        })
						} 
					})
	            }
        	}
		}
	</script>

	<style lang="css" scoped>
</style>