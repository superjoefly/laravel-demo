  @php
    function RandomQuotes($timebase, $quotesArray) {
      $count = count($quotesArray);
      $index = ($timebase % $count);
      return $quotesArray[$index];
    }
    $dayOfTheYear = date('z');
    $randomQuote = RandomQuotes($dayOfTheYear, $quotes);
  @endphp

  <h3 class="w3-text-teal"><q>{{$randomQuote['body']}}</q></h3>

  <p class="w3-text-indigo">-
    <i>{{$randomQuote['author']}}</i>
  </p>
