@extends('layout')
@section('content')

<section id="contact" class="contact sections lightbg">
            <div class="container">
                <div class="row">
                    @if(session()->has('flash'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session()->get('flash')}}</strong> mensaje
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    @endif
                    <div class="main_contact whitebackground">
                        <div class="head_title text-center">
                            <h2>Comentanos tus necesidades</h2>
							<p>Envia un mail nuestos acesores responderan en un breve tiempo</p>
                        </div>
                        <div class="contact_content">
                            <div class="col-md-6">
                                <div class="single_left_contact">
                                    <form method="post" action="{{route('mensaje')}}" id="formid">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nombres" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" name="body" rows="8" placeholder="Mensaje" required=""></textarea>
                                        </div>

                                        <div class="center-content">
                                            <input type="submit" value="Enviar" class="btn btn-default">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_right_contact">
                                    <p>Puedes enviarnos tu número telefónico y horario si desea que lo contacten por ese medio. </p>

                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Contact Section -->
@endsection