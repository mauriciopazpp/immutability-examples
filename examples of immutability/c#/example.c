#include<stdio.h>

class AnImmutableType
{
    public readonly double _value;

    public AnImmutableType(double x)
    {
      _value = x;
    }

    public AnImmutableType Square()
    {
      return new AnImmutableType(_value*_value);
    }

}
