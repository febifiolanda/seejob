<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <!-- <link href="css/main.css" rel="stylesheet" /> -->
    <style type="text/css">
        html {
          line-height: 1.15;
          /* 1 */
          -ms-text-size-adjust: 100%;
          /* 2 */
          -webkit-text-size-adjust: 100%;
          /* 2 */
        }

        /* Sections
           ========================================================================== */
        /**
         * Remove the margin in all browsers (opinionated).
         */
        body {
          margin: 0;
        }

        /**
         * Add the correct display in IE 9-.
         */
        article,
        aside,
        footer,
        header,
        nav,
        section {
          display: block;
        }

        /**
         * Correct the font size and margin on `h1` elements within `section` and
         * `article` contexts in Chrome, Firefox, and Safari.
         */
        h1 {
          font-size: 2em;
          margin: 0.67em 0;
        }

        /* Grouping content
           ========================================================================== */
        /**
         * Add the correct display in IE 9-.
         * 1. Add the correct display in IE.
         */
        figcaption,
        figure,
        main {
          /* 1 */
          display: block;
        }

        /**
         * Add the correct margin in IE 8.
         */
        figure {
          margin: 1em 40px;
        }

        /**
         * 1. Add the correct box sizing in Firefox.
         * 2. Show the overflow in Edge and IE.
         */
        hr {
          box-sizing: content-box;
          /* 1 */
          height: 0;
          /* 1 */
          overflow: visible;
          /* 2 */
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        pre {
          font-family: monospace, monospace;
          /* 1 */
          font-size: 1em;
          /* 2 */
        }

        /* Text-level semantics
           ========================================================================== */
        /**
         * 1. Remove the gray background on active links in IE 10.
         * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
         */
        a {
          background-color: transparent;
          /* 1 */
          -webkit-text-decoration-skip: objects;
          /* 2 */
        }

        /**
         * 1. Remove the bottom border in Chrome 57- and Firefox 39-.
         * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
         */
        abbr[title] {
          border-bottom: none;
          /* 1 */
          text-decoration: underline;
          /* 2 */
          text-decoration: underline dotted;
          /* 2 */
        }

        /**
         * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
         */
        b,
        strong {
          font-weight: inherit;
        }

        /**
         * Add the correct font weight in Chrome, Edge, and Safari.
         */
        b,
        strong {
          font-weight: bolder;
        }

        /**
         * 1. Correct the inheritance and scaling of font size in all browsers.
         * 2. Correct the odd `em` font sizing in all browsers.
         */
        code,
        kbd,
        samp {
          font-family: monospace, monospace;
          /* 1 */
          font-size: 1em;
          /* 2 */
        }

        /**
         * Add the correct font style in Android 4.3-.
         */
        dfn {
          font-style: italic;
        }

        /**
         * Add the correct background and color in IE 9-.
         */
        mark {
          background-color: #ff0;
          color: #000;
        }

        /**
         * Add the correct font size in all browsers.
         */
        small {
          font-size: 80%;
        }

        /**
         * Prevent `sub` and `sup` elements from affecting the line height in
         * all browsers.
         */
        sub,
        sup {
          font-size: 75%;
          line-height: 0;
          position: relative;
          vertical-align: baseline;
        }

        sub {
          bottom: -0.25em;
        }

        sup {
          top: -0.5em;
        }

        /* Embedded content
           ========================================================================== */
        /**
         * Add the correct display in IE 9-.
         */
        audio,
        video {
          display: inline-block;
        }

        /**
         * Add the correct display in iOS 4-7.
         */
        audio:not([controls]) {
          display: none;
          height: 0;
        }

        /**
         * Remove the border on images inside links in IE 10-.
         */
        img {
          border-style: none;
        }

        /**
         * Hide the overflow in IE.
         */
        svg:not(:root) {
          overflow: hidden;
        }

        /* Forms
           ========================================================================== */
        /**
         * 1. Change the font styles in all browsers (opinionated).
         * 2. Remove the margin in Firefox and Safari.
         */
        button,
        input,
        optgroup,
        select,
        textarea {
          font-family: sans-serif;
          /* 1 */
          font-size: 100%;
          /* 1 */
          line-height: 1.15;
          /* 1 */
          margin: 0;
          /* 2 */
        }

        /**
         * Show the overflow in IE.
         * 1. Show the overflow in Edge.
         */
        button,
        input {
          /* 1 */
          overflow: visible;
        }

        /**
         * Remove the inheritance of text transform in Edge, Firefox, and IE.
         * 1. Remove the inheritance of text transform in Firefox.
         */
        button,
        select {
          /* 1 */
          text-transform: none;
        }

        /**
         * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
         *    controls in Android 4.
         * 2. Correct the inability to style clickable types in iOS and Safari.
         */
        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
          -webkit-appearance: button;
          /* 2 */
        }

        /**
         * Remove the inner border and padding in Firefox.
         */
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
          border-style: none;
          padding: 0;
        }

        /**
         * Restore the focus styles unset by the previous rule.
         */
        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
          outline: 1px dotted ButtonText;
        }

        /**
         * Correct the padding in Firefox.
         */
        fieldset {
          padding: 0.35em 0.75em 0.625em;
        }

        /**
         * 1. Correct the text wrapping in Edge and IE.
         * 2. Correct the color inheritance from `fieldset` elements in IE.
         * 3. Remove the padding so developers are not caught out when they zero out
         *    `fieldset` elements in all browsers.
         */
        legend {
          box-sizing: border-box;
          /* 1 */
          color: inherit;
          /* 2 */
          display: table;
          /* 1 */
          max-width: 100%;
          /* 1 */
          padding: 0;
          /* 3 */
          white-space: normal;
          /* 1 */
        }

        /**
         * 1. Add the correct display in IE 9-.
         * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
         */
        progress {
          display: inline-block;
          /* 1 */
          vertical-align: baseline;
          /* 2 */
        }

        /**
         * Remove the default vertical scrollbar in IE.
         */
        textarea {
          overflow: auto;
        }

        /**
         * 1. Add the correct box sizing in IE 10-.
         * 2. Remove the padding in IE 10-.
         */
        [type="checkbox"],
        [type="radio"] {
          box-sizing: border-box;
          /* 1 */
          padding: 0;
          /* 2 */
        }

        /**
         * Correct the cursor style of increment and decrement buttons in Chrome.
         */
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
          height: auto;
        }

        /**
         * 1. Correct the odd appearance in Chrome and Safari.
         * 2. Correct the outline style in Safari.
         */
        [type="search"] {
          -webkit-appearance: textfield;
          /* 1 */
          outline-offset: -2px;
          /* 2 */
        }

        /**
         * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
         */
        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
          -webkit-appearance: none;
        }

        /**
         * 1. Correct the inability to style clickable types in iOS and Safari.
         * 2. Change font properties to `inherit` in Safari.
         */
        ::-webkit-file-upload-button {
          -webkit-appearance: button;
          /* 1 */
          font: inherit;
          /* 2 */
        }

        /* Interactive
           ========================================================================== */
        /*
         * Add the correct display in IE 9-.
         * 1. Add the correct display in Edge, IE, and Firefox.
         */
        details,
        menu {
          display: block;
        }

        /*
         * Add the correct display in all browsers.
         */
        summary {
          display: list-item;
        }

        /* Scripting
           ========================================================================== */
        /**
         * Add the correct display in IE 9-.
         */
        canvas {
          display: inline-block;
        }

        /**
         * Add the correct display in IE.
         */
        template {
          display: none;
        }

        /* Hidden
           ========================================================================== */
        /**
         * Add the correct display in IE 10-.
         */
        [hidden] {
          display: none;
        }

        html {
          height: 100%;
        }

        fieldset {
          margin: 0;
          padding: 0;
          -webkit-margin-start: 0;
          -webkit-margin-end: 0;
          -webkit-padding-before: 0;
          -webkit-padding-start: 0;
          -webkit-padding-end: 0;
          -webkit-padding-after: 0;
          border: 0;
        }

        legend {
          margin: 0;
          padding: 0;
          display: block;
          -webkit-padding-start: 0;
          -webkit-padding-end: 0;
        }

        * {
          box-sizing: border-box;
        }

        .s01 {
          min-height: 100vh;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-pack: center;
              justify-content: center;
          -ms-flex-align: center;
              align-items: center;
          font-family: 'Poppins', sans-serif;
          background: url("http://www.tas.co.in/wp-content/uploads/2019/02/5-Step-Guide-to-Starting-1-e1-1024x669.jpg");
          background-size: cover;
          background-position: center center;
          padding: 15px;
        }

        .s01 form {
          width: 100%;
          max-width: 1290px;
        }

        .s01 form legend {
          font-size: 72px;
          line-height: 1;
          color: #fff;
          margin-bottom: 60px;
        }

        .s01 form .inner-form {
          background: rgba(0, 0, 0, 0.5);
          padding: 50px 47px;
          display: -ms-flexbox;
          display: flex;
          width: 100%;
          -ms-flex-pack: justify;
              justify-content: space-between;
          -ms-flex-align: center;
              align-items: center;
        }

        .s01 form .inner-form .input-field {
          margin-right: 30px;
          height: 68px;
        }

        .s01 form .inner-form .input-field input {
          height: 100%;
          background: #fff;
          border-radius: .5px;
          border: 0;
          display: block;
          width: 100%;
          padding: 10px 32px;
          font-size: 20px;
        }

        .s01 form .inner-form .input-field input.placeholder {
          color: #9a9a9a;
          font-size: 20px;
        }

        .s01 form .inner-form .input-field input:-moz-placeholder {
          color: #9a9a9a;
          font-size: 20px;
        }

        .s01 form .inner-form .input-field input::-webkit-input-placeholder {
          color: #9a9a9a;
          font-size: 20px;
        }

        .s01 form .inner-form .input-field input:hover, .s01 form .inner-form .input-field input:focus {
          box-shadow: none;
          outline: 0;
        }

        .s01 form .inner-form .input-field.first-wrap {
          -ms-flex-positive: 1;
              flex-grow: 1;
        }

        .s01 form .inner-form .input-field.second-wrap {
          width: 32.77%;
          min-width: 180px;
        }

        .s01 form .inner-form .input-field.third-wrap {
          width: 180px;
          margin-right: 0;
        }

        .s01 form .inner-form .input-field.third-wrap .btn-search {
          height: 100%;
          width: 100%;
          background: #4272d7;
          white-space: nowrap;
          border-radius: .5px;
          font-size: 20px;
          color: #fff;
          transition: all .2s ease-out, color .2s ease-out;
          border: 0;
          cursor: pointer;
        }

        .s01 form .inner-form .input-field.third-wrap .btn-search:hover {
          background: #2d62d3;
        }

        @media screen and (max-width: 992px) {
          .s01 form legend {
            font-size: 50px;
            text-align: center;
            margin-bottom: 50px;
          }
          .s01 form .inner-form {
            padding: 30px 35px;
          }
          .s01 form .inner-form .input-field {
            height: 50px;
          }
        }

        @media screen and (max-width: 767px) {
          .s01 form legend {
            font-size: 40px;
            margin-bottom: 40px;
          }
          .s01 form .inner-form {
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            padding: 20px;
          }
          .s01 form .inner-form .input-field {
            margin-right: 0;
          }
          .s01 form .inner-form .input-field input {
            padding: 5px 15px;
            font-size: 16px;
          }
          .s01 form .inner-form .input-field.first-wrap {
            width: 100%;
            margin-bottom: 20px;
          }
          .s01 form .inner-form .input-field.second-wrap {
            width: calc(50% - 10px);
            min-width: auto;
          }
          .s01 form .inner-form .input-field.third-wrap {
            width: calc(50% - 10px);
          }
          .s01 form .inner-form .input-field.third-wrap .btn-search {
            font-size: 16px;
          }
        }

    </style>
  </head>
  <body>
    <div class="s01">
        <a class="btn btn-link" href="{{ url('/home') }}">Homes</a>
      <form>
        <fieldset>
          <legend>Pencarian Gaji Perusahaan</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="nama" type="text" placeholder="Nama Perusahaan" />
            <br/>
          </div>
          
          <div class="input-field second-wrap">
            <input id="jabatan" type="text" placeholder="Jabatan" />
          </div>

          <div class="input-field third-wrap">
            <button class="btn-search" type="button">Search</button>
          </div>
        </div>
      </form>
    </div>
    <div>
        <div id="list">

        </div>
    </div>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

    
    <script type="text/javascript">
    // $(document).ready(function(){
    //   console.log('data');
    //         $.ajax({ 
    //         type: 'GET', 
    //         url: 'http://localhost:8000/api/dataKos',  
    //         dataType: 'json',
    //         success: function (data) { 
    //            console.log(data);
    //           //  var obj=$.parseJSON(data);
    //           $.each(data, function(key, value){
    //             $('#list').append('<p>'+value['nama']+'</p>')
    //           })
              
    //         }
    //     });
    //     });

    $(document).on('click', '.btn-search', function(event){
            alert('Yakin ingin mencari data?');
            event.preventDefault();
            $.ajax({
            url: 'http://localhost:8000/api/dataJob',
            type: 'get',
            dataType : 'json',
            data: {
                    "nama_perusahaan": $('#nama').val(),
                    "jabatan": $('#jabatan').val()
                },
            success: function (data) {
                console.info(data);
                $('#list').empty();
                $.each(data, function(key, value){
                $('#list').append('<p>'+value['nama_perusahaan']+'</p>')
              })
            }
        });
        });


    </script>