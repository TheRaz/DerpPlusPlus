DerpPlusPlus
============


Please give BrainfuckPHP a visit instead!
=========================================
Please note that this project was started at 03:00, will most likely be worked on 03:00 and therefor the codequality will suffer.
***

Derp++ is a PHP Interpreter for a Brainfuck-ish Language, the difference is the change of which operators are used.


| Operator | Function                                    |
|:---------|--------------------------------------------:|
| HERP     | Moves pointer 1 cell to the right           |
| DERP     | Moves pointer 1 cell to the left            |
| HURR     | Adds 1 to the current cell                  |
| DURR     | Subtracts 1 from the current cell           |
| GIGGITY  | Prints Ascii representation of current cell |
| GOO      | Inputs Ascii value of input character       |

##### WOOPY
> if the value at the current cell is zero, then instead of moving the instruction pointer forward to the next command, jump it forward to the command after the matching DOO command.

##### DOO
> if the valuue at the current cell is > 0, then instead of moving the instruction pointer forward to the next command, jump it back to the command after the matching WOOPY command.


Useage
======
```php
  $derp = new derpplusplus();
  $derp->interpret('DERP++ Code');
```



Code examples
=============
######Printing the alphabet
```
 HURRHURRHURRHURRHURRWOOPYHERPHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRDERPDURRDOOHERPGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITYHURRGIGGITY
```

######Hello World!
```
 HURRHURRHURRHURRHURRHURRHURRHURRHURRHURRWOOPYHERPHURRHURRHURRHURRHURRHURRHURRHERPHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHERPHURRHURRHURRHERPHURRDERPDERPDERPDERPDURRDOOHERPHURRHURRGIGGITYHERPHURRGIGGITYHURRHURRHURRHURRHURRHURRHURRGIGGITYGIGGITYHURRHURRHURRGIGGITYHERPHURRHURRGIGGITYDERPDERPHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRHURRGIGGITYHERPGIGGITYHURRHURRHURRGIGGITYDURRDURRDURRDURRDURRDURRGIGGITYDURRDURRDURRDURRDURRDURRDURRDURRGIGGITYHERPHURRGIGGITYHERPGIGGITY

```

