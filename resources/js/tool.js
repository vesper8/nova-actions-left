import ResourceTableHeader from './components/ResourceTableHeader';
import ResourceTableRow from './components/ResourceTableRow';

Nova.booting((app, store) => {
    app.component('ResourceTableHeader', ResourceTableHeader);
    app.component('ResourceTableRow', ResourceTableRow);
});