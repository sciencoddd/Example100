
#include <stdio.h>



char from_user(void)
{
	printf("\nPlease Enter the number of stairs: ");
	char stairs;
	scanf("%d", &stairs);
	return stairs;
}

void main(char* stairsP)
{
/*	
printf("%d", *stairsP);
Такая строка выдаёт ошибку. Просто виснет терминал.
*/
	char hight = from_user();
	char* hightP = &hight;
	printf("\nYou enter the %i\nAnd now look at you result:\n\n", *hightP);

	if (*hightP < 1)
	{
		printf("The entered value must be bigger than 0\n");
	}
	else if (*hightP >= 10)
	{
		printf("The entered value must be smaller than 10\n");
	}
    else if (*hightP >= 1 || *hightP < 10)
	{

		char z;
		for(z = 0; z < *hightP; z++)
		{
			for(char y = 0; y < *hightP-(z+1); y++)
// hight-(z+1) == для того, чтобы успевать вписываться в каждый цикл
// z+1 == с учётом того, что в строке должен быть ещё один, другой символ (~)
				printf(" ");
			for(char x = 0; x < z+1; x++)
// x < z+1 == для того, чтобы x отставал от сохранённого значения внешнего цикла
				printf("~");
// но нам нужно как-то достроить узор для симметрии:
			for(char secret = 0; secret < z; secret++)
				printf("~");

		printf("\n"); // This is variable "z"
		}
	}
    
    return;
}
