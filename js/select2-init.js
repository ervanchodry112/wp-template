/** @format */

$(document).ready(function ($) {
  $('#select2-pt').select2({
    placeholder: 'Memuat..',
    allowClear: false,
  });
  $('#select2-jabatan').select2({
    placeholder: 'Pilih Jabatan Anda',
    allowClear: false,
  });
  $('#select2-jmlmhs').select2({
    minimumResultsForSearch: -1,
    placeholder: 'Pilih Jumlah Mahasiswa',
    allowClear: false,
  });
  $('#select2-sumberInfo').select2({
    minimumResultsForSearch: -1,
    placeholder: 'Pilih Sumber Informasi',
    allowClear: false,
  });
});

// select2 select kampus

// function input_length() {
//   var length = $(".select2-search__field").find(input).val().length;
//   if (length < 2) {
//     return "Tambahkan " + (2 - length) + " karakter.";
//   }
// }

var term_names_array = [];
$(document).ready(function () {
  $.ajax({
    url: theme_directory + '/js/daftar-kampus-2.json',
    dataType: 'json',
  }).done(function (data) {
    for (index = 0; index < data.length; ++index) {
      term_names_array.push({ id: index, text: data[index] });
      console.log(data[index]);
    }
  });
});

$(document).ajaxComplete(function () {
  var select2Kampus = $('.wp-select2#select2-pt');
  $(select2Kampus).select2({
    minimumInputLength: 3,
    dataType: 'json',
    data: term_names_array,
    placeholder: 'Pilih PT Anda',
    // language: {
    //   inputTooShort: function () {
    //     return input_length();
    //   },
    // },
  });

  var autocomplete_field = document.getElementById('nama-pt');
  var kodept_field = document.getElementById('kode-pt');

  var kodept;
  var newNama = new Array();
  select2Kampus.on('select2:select', function (e) {
    var data = e.params.data.text;
    newNama.length = 0;
    kodept = data.split(' ');
    kodept_field.value = kodept[0];

    for (var i = 2; i < kodept.length; i++) {
      if (kodept[i] === '-') {
        break;
      }
      newNama.push(kodept[i]);
    }

    autocomplete_field.value = newNama.join(' ');
  });
});
