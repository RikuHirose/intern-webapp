@extends('layouts.app', ['noContainer' => true])

@section('content')
<div class="p-index">

  <!-- p-index--image -->
  <div class="p-index__image">
    <p class="p-index--copy">エンジニアキャリアの一歩目を支える</p>
    <div class="p-index__search-form">
        <!-- のちにここに検索barが追加されます -->
    </div>
  </div>

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <!-- のちにここに求人カウントのcomponentが追加されます -->
              <div>
                @each('components.jobs.index-card', $jobs, 'job')
              </div>
              <!-- のちにここにカスタムのpaginationが追加されます -->
          </div>
      </div>
  </div>
</div>
@endsection