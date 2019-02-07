//array to receive input barcode
var counstituent_sound =[];
var barcode;
var arrpegio;
var height = 4;
var chord_progress = [];

//imitaitng keybord for calcrate
var musical_scale = {
  '1': 'C',
  '1.5': 'C#',
  '2': 'D',
  '2.5': 'D#',
  '3': 'E',
  '4': 'F',
  '4.5': 'F#',
  '5': 'G',
  '5.5': 'G#',
  '6': 'A',
  '6.5': 'A#',
  '7': 'B',
};

/*chords 
straged 3 tryad chords in 1~7 index.
the case of 8,9,0 calulate number for make another chords ex sus4,aug,dim. 
*/

var chord = {
  '1': '135',
  '2': '246',
  '3': '357',
  '4': '461',
  '5': '572',
  '6': '613',
  '7': '724',
};

function chord_player(arp_index){
  return musical_scale[arrpegio[arp_index] ] + height;
}

/*
var isbn_cord=[
  '9784003420935',
  '9784822248819',
  '9784003220214'
]
*/