<!-- Header - INCLUDE -->
<header class="w3-container w3-center w3-padding-32">
  <h1><b>SJF Blog</b></h1>
  <p>Welcome to the blog of <span class="w3-tag w3-teal">SuperJoeFly</span></p>

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

    <img src="/images/avatar.png" style="height: 200px; width: 200px;" />
</header>
