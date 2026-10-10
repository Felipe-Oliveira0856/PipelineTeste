#Imagem base que vai ser usada
FROM python:3.12-slim

#Diretório de trabalho dentro do container
WORKDIR /app

<<<<<<< HEAD
RUN apt-get update && apt-get install -y --no-install-recommends iputils-ping \
    && rm -rf /var/lib/apt/lists/*
    
=======
>>>>>>> e494d2d42edfa9ddd7c7329bd956bf86f380c346
#arquivo de dependências
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

#Copia o resto do código-fonte
COPY . .

#Porta que a aplicação usa
EXPOSE 5000

#Comando para iniciar a aplicação
CMD ["python", "app.py"]