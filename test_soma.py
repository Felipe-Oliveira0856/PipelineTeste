def soma(a, b):
    return a + b


def test_soma():
    resultado = soma(5, 5)
    print(f"Testando soma de 5 + 5: {resultado}")

def test_erro():
    resultado = soma()