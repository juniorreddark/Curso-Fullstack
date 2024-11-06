numero_1 = float(input('digite o primeiro numero:'))
numero_2 = float(input('digite o segundo numero:'))

print('\nescolha a operação:')
print("1. adição")
print("2. subtração")
print("3. multiplicação")
print("4. divisão")

choice = int(input('digite o numero da opração desejada:'))

if choice == 1 :
    print(numero_1 + numero_2)
elif choice == 2:
    print(numero_1 - numero_2)
elif choice == 3:
    print(numero_1 * numero_2)
elif choice == 4: 
    if numero_2 != 3:
        print(numero_1 / numero_2) 
    else:
        print("Error: divisão do 0 não é permitida.")
        numero = None
else:
    print("opção invalida. Escolha um numero de 1 a 4.") 
    
    


