@foreach($stories as $story)
    <x-card-intipCerita :story="$story"/>
@endforeach
@if($stories->isEmpty())
    <div style="padding:30px;text-align:center;width:100%;">Tidak ada cerita ditemukan.</div>
@endif
