import AllExams from './components/AllExams.vue';
import AddExam from './components/AddExam.vue';
import EditExam from './components/EditExam.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllExams
    },
    {
        name: 'add',
        path: '/add',
        component: AddExam
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditExam
    }
];