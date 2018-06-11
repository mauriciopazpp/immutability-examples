#include<stdio.h>

class Immutable
{
    public readonly double _value; // Não pode ser modificado!

    public Immutable(double x)
    {
      _value = x;
    }

    public Immutable Square()
    {
      return new Immutable(_value*_value);
    }

}
