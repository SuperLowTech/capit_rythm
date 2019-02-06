$(function(){

  //Check the input
  $('input.barcode').on('blur',function(){
    let error;
    let value =$(this).val();
    if(value == ""){
      error = true;
    }else if(value.match('+'|'-')){
        error = true;
      }
    if(error){
       alert('Enter barcode');
    }
  });

  // genereted chord by use user input
  $("#genrate_song").click(function(){

    var i;
    barcode = [...$('.barcode').val()];

    //init display area
    $(".display_area").text('');

    for(i = 0; i < barcode.length; i++){
      chord_progress.push([musical_scale[barcode[i] ] ]);
      counstituent_sound.push([chord[barcode[i] ] ]);
    }
    $(".display_area").text(chord_progress);
    });

    //make sound
    $("#play").click(function(){

      var i;
      var melody_data=[];

      for(i = 0; i < chord_progress.length; i++){
                    
        arrpegio = String(counstituent_sound[i] ).split('');
        
        melody_data.push(chord_player(0));
        melody_data.push(chord_player(1));
        melody_data.push(chord_player(2));
        melody_data.push(null);

      }
      play_music();
      
      var synth = new Tone.PolySynth().toMaster();

      function addMelody(time, note) {
          synth.triggerAttackRelease(note, '16n', time);
      }
      var melody = new Tone.Sequence(addMelody, melody_data ).start();
      Tone.Transport.bpm.value = 180;
      
      function play_music() {
        //alert(chord_player(0));
        Tone.Transport.start();
      }

    })
  });