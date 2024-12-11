#Crear una calculadora con las operaciones matematicas basicas

n1=0
n2=0
operador=""
resultado = 0



print("Digite el primer numero")
n1=int(input())

print("Digite la operacion a realizar")
operador=input()

print("Digite el segundo numero")
n2=int(input())

if operador == "+":
  resultado = n1 + n2
elif operador == "-":
  resultado = n1 - n2
elif operador == "*":
  resultado = n1 * n2
elif operador == "/":
  resultado = n1 / n2


print("El resultado es: ", resultado)
