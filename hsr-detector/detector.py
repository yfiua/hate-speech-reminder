import pickle

with open('model.pkl', 'rb') as inputfile:
    cl = pickle.load(inputfile)

prob_dist = cl.prob_classify("Fuck you, stupid moron!!!")
print prob_dist.prob("1")
