import _ from 'lodash';
import { numToWord, wordToNum } from 'webpack-numbers';
import printMe from './print';

function component() {
  const element = document.createElement('div');
  const btn = document.createElement('button');

  element.innerHTML = _.join(['Hello', 'webpack'], ' ');
  console.log('I ran');
  console.log(numToWord(2));
  console.log(wordToNum('three'));

  btn.innerHTML = 'Click me and check the console!';
  btn.onclick = printMe;
  element.appendChild(btn);
  return element;
}

document.body.appendChild(component());
