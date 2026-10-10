from app import soma


def test_soma():
    assert soma(2, 3) == 5
    assert soma(10, 10) == 20
    assert soma(-1, 5) == "Erro, numeros nao podem ser negativos"
