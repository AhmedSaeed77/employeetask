@extends('layouts.master')

@section('content')
<div class="container" id="types">
    <h1></h1>
    <label class="form-label">Form fieldset</label>
    <form class="needs-validation was-validated" id="createEmployee">
        <fieldset class="form-fieldset">
            <div class="mb-3">
                <label class="form-label required">Full name</label>
                <input type="text" class="form-control" autocomplete="off"/>
            </div>
            <div class="mb-3">
                <label class="form-label required">Company</label>
                <input type="text" class="form-control"  autocomplete="off"/>
            </div>
            <div class="mb-3">
                <label class="form-label required">Email</label>
                <input type="email" class="form-control"  autocomplete="off"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone number</label>
                <input type="tel" class="form-control" autocomplete="off"/>
            </div>
            <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label required">I agree to the Terms & Conditions</span>
            </label>
        </fieldset>
        <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">حفظ</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('js')
@include('vue')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
    <script>
			var app = new Vue
			({
				el:'#types',
				data:
				{ 
					name 	: 'Ahmed saeed' ,
					 
				},

				methods:
				{
					increase22 : function( number , event )
					{
						this.c += number 
						this.type = event.type
					},
					
					
				}
			});
		</script>
    <!-- <script type="text/javascript">
        content = new Vue({
            'el': '#types',
            data: {
                name:'',
                grade_id:'',
                error:[]
            },
            methods: {
                validation:function(el , msg){
                    if(el == ''){
                        this.error.push({
                            'err' : 'err'
                        });
                        swal({
                                title:  msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        return 0;
                    }
                },
                saveData: function(e) {
                    e.preventDefault();
                        this.error = []
                        this.validation(this.grade_id , '  المرحله   مطلوب ');
                        this.validation(this.name , '  الاسلم باللغه العربيه مطلوب ');
                    if (this.error.length !== 0) {
                            return false
                        }
                    let formData = new FormData(document.getElementById('createType'));
                    this.load = true;
                    axios.post('{{ route('employee.store') }}', formData).then(response => {
                        console.log(response)
                        if (response.data.err == true) {
                            swal({
                                title: response.data.msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: response.data.msg,
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                            this.load = false;
                        }
                    }).catch(response => {
                        swal({
                            title: response.response.message,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    })
                    window.location.href = '{{ route('employee.index' )}}';
                }
            }
        });
    </script> -->
@endsection
