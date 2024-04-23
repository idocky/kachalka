@extends('layout')

@section('content')
    <main role="main">

        <section class="wt-section bg-light mt-5" id="services">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2 mt-5">Наші секції</h2>
                        <p class="lead text-muted">Наша мережа має безліч різних спортивних заходів, які напевно припадуть вам до душі</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($workout_types as $type)
                        <div class="col-md-4">
                            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
                                <a href="#"><img class="card-img-top" src="{{ asset('storage/' . $type->image) }}" alt="card image"></a>
                                <div class="card-body py-4">
                                    <h5 class="mb-4 text-primary">{{ $type->title }}</h5>
                                    <div class="mb-4">
                                        <p>{{ $type->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="wt-section pb-0" id="about">
            <div class="container">
                <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
                    <div class="col-md-5">
                        <img src="{{ asset('img/about/1.jpg') }}" width="90%" class="rounded-md" alt="">
                    </div>
                    <div class="col-md-7">
                        <h2 class="mb-4 ">Про нас</h2>
                        <p class="text-muted">Наша команда - це сплочений колектив, який працює на результат. Ми пройшли складний шлях розвитку і зарекомендували себе як надійний партнер у сфері інноваційних технологій. Наша місія - створювати продукти, які відповідають потребам сучасного ринку та сприяють досягненню успіху наших клієнтів.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-between align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
                    <div class="col-md-7">
                        <h2 class="mb-4">Професійна команда</h2>
                        <p class="text-muted">Наші фахівці - це професіонали своєї справи з багаторічним досвідом у сфері розробки програмного забезпечення. Кожен член нашої команди має високі стандарти роботи та надзвичайну увагу до деталей.</p>
                    </div>

                    <div class="col-md-5">
                        <img src="{{ asset('img/about/2.jpg') }}" width="90%" class="rounded-md" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-section bg-primary">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">Зручності</h2>

                    </div>
                </div>
                <!-- Feature Blocks -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-white p-5 mb-4 text-center rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
                            <i class="ti-share-alt display-4 d-block text-primary mb-4"></i>
                            <h6 class="my-2">Парова баня</h6>
                            <p class="text-muted">Зануртесь в світ розслаблення з нашою наявною паровою банею, де ви зможете насолоджуватися відпочинком і очищенням тіла.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-5 mb-4 text-center rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="500">
                            <i class="ti-pulse display-4 d-block text-primary mb-4"></i>
                            <h6 class="my-2">Wi-Fi</h6>
                            <p class="text-muted">Насолоджуйтесь комфортом з нашим швидким Wi-Fi</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-white p-5 mb-4 text-center rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="800">
                            <i class="ti-panel display-4 d-block text-primary mb-4"></i>
                            <h6 class="my-2">Вентиляція</h6>
                            <p class="text-muted">Наша відмінна система вентиляції забезпечить свіжий та чистий повітря, що додасть вашому досвіду максимальний комфорт.</p>
                        </div>
                    </div>
                </div>
                <!-- End Feature Blocks -->
            </div>
        </section>

        <section class="bg-light wt-section" id="team">
            <div class="container">
                <div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
                    <div class="col-md-12">
                        <h2 class="h1">Наша команда</h2>
                        <p>У нас працюють найкращі з найкращих</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($coaches as $coach)
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <figure data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                                <img class="w-100 rounded-top" src="{{ asset('storage/' . $coach->image) }}" alt="Image Description">
                                <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                                    <div class="mb-3">
                                        <h5 class="mb-1">{{ $coach->full_name }}</h5>
                                        <small class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Стаж: {{ $coach->experience }} років</small>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="wt-section" id="price">
            <div class="container">
                <div class="row justify-content-md-center text-center mb-lg-5 mb-4 pb-lg-5">
                    <div class="col-md-12">
                        <h2 class="h1">Ціни & Графік</h2>
                    </div>
                </div>
                <div class="container mt-5 row justify-content-md-center text-center mb-lg-5 pb-lg-5">
                    @foreach($dates as $workout_date)
                        <div class="btn-group m-2" role="group">
                            <button type="button" class="btn btn-secondary date-button" data-date="{{ $workout_date[0] }}">{{ $workout_date[1] }}</button>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table custom-table table-borderless">
                                <thead>
                                <tr>
                                    <th>Час</th>
                                    <th>Заняття</th>
                                    <th>Тренер</th>
                                    <th>Ціна</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($workouts as $workout)
                                        <tr data-aos="fade-in" data-aos-easing="linear" data-aos-delay="200">
                                            <td>{{ $workout->start_time->format('H:i') }} - {{ $workout->end_time->format('H:i') }}</td>
                                            <td>
                                                <h6>{{ $workout->workout_types->title }}</h6>
                                                <span class="text-muted">{{ $workout->place }}</span>
                                            </td>
                                            <td>
                                                <h6>{{ $workout->coaches->full_name }}</h6>
                                            </td>
                                            <td>
                                                <h6>{{ $workout->price }} ₴</h6>
                                            </td>
                                            <td>
                                                @if($workout->user_id)
                                                    <div class="btn btn-secondary btn-pill">Зайнято</div>
                                                @else
                                                    <a href="#" class="btn btn-primary btn-pill join-workout" data-workout-id="{{ $workout->id }}">Приєднатися</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-dark position-relative pt-5">
            <div class="container">
                <div class="row text-center text-uppercase text-white">
                    <div class="col-lg-3 col-sm-6 pb-5">
                        <h5 class="js-counter display-4 mb-1">15</h5>
                        <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Тренери</small>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5">
                        <h5 class="js-counter display-4 mb-1">114</h5>
                        <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Обладнання</small>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5">
                        <h5 class="js-counter display-4 mb-1">245</h5>
                        <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Клієнти</small>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5">
                        <h5 class="js-counter display-4 mb-1">2</h5>
                        <small class="d-block font-style-normal text-uppercase wt-letter-spacing-sm">Кофетерії</small>
                    </div>
                </div>
            </div>
        </section>


    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.join-workout').click(function(e) {
                e.preventDefault();
                var button = $(this);
                var workoutId = button.data('workout-id');
                $.ajax({
                    url: '/assignClientToWorkout/' + workoutId,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        button.replaceWith('<div class="btn btn-secondary btn-pill">Зайнято</div>');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('.date-button').click(function () {
                const date = $(this).data('date');
                const currentUrl = window.location.href;
                const baseUrl = currentUrl.split('?')[0];
                const newUrl = baseUrl + '?date=' + date;

                window.history.pushState({ path: newUrl }, '', newUrl);
                window.location.reload();
            });
        });
    </script>
@endsection
