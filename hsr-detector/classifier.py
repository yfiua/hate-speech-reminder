import pandas as pd
import nltk
import pickle
from textblob.classifiers import NaiveBayesClassifier

def do_smth(x):
    message=x.Comment[1:-1].replace("\\\\n"," ")
    tokens = nltk.word_tokenize(message)
    mes_annot=(tokens,str(x.Insult))
    return mes_annot

def save_object(obj, filename):
    with open(filename, 'wb') as output:
        pickle.dump(obj, output, pickle.HIGHEST_PROTOCOL)

df=pd.read_csv("train.csv")
df2=df[["Insult","Comment"]]
df2["token"]=df2.apply(lambda x: do_smth(x), axis=1)

cl = NaiveBayesClassifier(list(df2.token.values[:2000]))

save_object(cl, 'model.pkl')
