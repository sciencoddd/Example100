
# Функция input() может принимать необязательный аргумент-приглашение строкового типа.
# Но т.к. данная функция возвращает Строку, нам нужно перенаправить её результат в Int
stairs = int(input("\nPlease Enter the number of stairs: "))

print('\nYou enter the ' + str(stairs) + "\nAnd now look at you result:\n")

if stairs < 1:
    print("The entered value must be bigger than 0\n")
elif stairs >= 10:
    print("The entered value must be smaller than 10\n")
else:
	z = 0
	while z < stairs:
		y = 0
		while y < stairs-(z+1):
			print(' ', end='')
			y += 1
		x = 0
		while x < z+1:
			print("~", end="")
			x = x + 1		
		s = 0
		while s < z:
			print('~', end='')
			s +=1
		z += 1
		print("\n", end='')
