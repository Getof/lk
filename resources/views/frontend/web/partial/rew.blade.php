@foreach($reviews as $review)
<div class="review-block">
        <div class="review-img d-flex flex-jc-sb">
            <div class="review-img__person d-flex">
                <img src="{{asset('front/img/'.$review->img)}}" alt="photo" class="review-img__person-photo">
                <div class="review-img__person-info">
                    <span class="review-img__person-info__name">{{$review->name}}</span>
                    @if($review->role == 'teacher') <span class="review-img__person-info__status">Преподаватель</span>
                    @else <span class="review-img__person-info__status">Родитель</span>
                    @endif
                </div>
            </div>
            <img src="{{asset('front/img/quote.svg')}}" alt="quote" class="review-img__quote">
        </div>
        <div class="review-text-container">
            <span class="review-text">{{$review->review}}</span>
        </div>
    </div>
@endforeach
