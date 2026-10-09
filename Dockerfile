#Imagem base que vai ser usada
FROM python:3.12-slim

#Diretório de trabalho dentro do container
WORKDIR /app

#arquivo de dependências
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

#Copia o resto do código-fonte
COPY . .

#Porta que a aplicação usa
EXPOSE 5000

#Comando para iniciar a aplicação
CMD ["python", "app.py"]